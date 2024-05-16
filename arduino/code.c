#include <LiquidCrystal.h>
#include <HttpClient.h>

const int showerFlowSensorPin = 2; // Flow sensor connected to digital pin 2 for shower
const int dishesFlowSensorPin = 3; // Flow sensor connected to digital pin 3 for washing dishes

const int showerRelayControlPin = 4; // Relay control pin connected to digital pin 4 for shower
const int dishesRelayControlPin = 5; // Relay control pin connected to digital pin 5 for washing dishes

volatile float showerFlowRate;
volatile float dishesFlowRate;
volatile unsigned int showerPulseCount;
volatile unsigned int dishesPulseCount;
unsigned int showerFlowMilliLitres;
unsigned int dishesFlowMilliLitres;
unsigned long showerTotalMilliLitres;
unsigned long dishesTotalMilliLitres;
unsigned long showerOldTime;
unsigned long dishesOldTime;
unsigned long showerCurrentTime;
unsigned long dishesCurrentTime;

// Define water limits for different scenarios (in liters)
const float showerWaterLimit = 50.0; // Adjust for shower usage
const float dishesWaterLimit = 30.0; // Adjust for washing dishes usage

// Define current water limits
float currentShowerWaterLimit = showerWaterLimit;
float currentDishesWaterLimit = dishesWaterLimit;

// Define your Laravel API endpoints
const char* showerServerAddress = "http://127.0.0.1/api/shower-water-flow-data"; // Replace with your Laravel API endpoint for shower
const char* dishesServerAddress = "http://127.0.0.1/api/dishes-water-flow-data"; // Replace with your Laravel API endpoint for washing dishes
HttpClient showerClient;
HttpClient dishesClient;

void setup() {
  Serial.begin(9600);
  pinMode(showerRelayControlPin, OUTPUT);
  pinMode(dishesRelayControlPin, OUTPUT);
  pinMode(showerFlowSensorPin, INPUT_PULLUP);
  pinMode(dishesFlowSensorPin, INPUT_PULLUP);
  attachInterrupt(digitalPinToInterrupt(showerFlowSensorPin), showerPulseCounter, FALLING);
  attachInterrupt(digitalPinToInterrupt(dishesFlowSensorPin), dishesPulseCounter, FALLING);
  showerPulseCount = 0;
  dishesPulseCount = 0;
  showerFlowRate = 0.0;
  dishesFlowRate = 0.0;
  showerFlowMilliLitres = 0;
  dishesFlowMilliLitres = 0;
  showerTotalMilliLitres = 0;
  dishesTotalMilliLitres = 0;
  showerOldTime = 0;
  dishesOldTime = 0;
}

void loop() {
  showerCurrentTime = millis();
  if (showerCurrentTime - showerOldTime > 1000) {
    detachInterrupt(digitalPinToInterrupt(showerFlowSensorPin));
    showerFlowRate = (1000.0 / (showerCurrentTime - showerOldTime)) * showerPulseCount;
    showerOldTime = showerCurrentTime;
    showerFlowMilliLitres = (showerFlowRate / 60) * 1000;
    showerTotalMilliLitres += showerFlowMilliLitres;
    showerPulseCount = 0;
    attachInterrupt(digitalPinToInterrupt(showerFlowSensorPin), showerPulseCounter, FALLING);

    Serial.print("Shower Flow rate: ");
    Serial.print(showerFlowRate);
    Serial.print(" L/min\tTotal shower flow: ");
    Serial.print(showerTotalMilliLitres / 1000);
    Serial.println(" L");

    // Send shower data to Laravel
    sendShowerDataToLaravel(showerFlowRate, showerTotalMilliLitres / 1000);

    // Check if shower water limit is reached
    if (showerTotalMilliLitres / 1000 > currentShowerWaterLimit) {
      digitalWrite(showerRelayControlPin, LOW);
      delay(20000); // Stop water flow for 20 seconds
      digitalWrite(showerRelayControlPin, HIGH);
      // Reset the total flow after stopping water
      showerTotalMilliLitres = 0;
    }
  }

  dishesCurrentTime = millis();
  if (dishesCurrentTime - dishesOldTime > 1000) {
    detachInterrupt(digitalPinToInterrupt(dishesFlowSensorPin));
    dishesFlowRate = (1000.0 / (dishesCurrentTime - dishesOldTime)) * dishesPulseCount;
    dishesOldTime = dishesCurrentTime;
    dishesFlowMilliLitres = (dishesFlowRate / 60) * 1000;
    dishesTotalMilliLitres += dishesFlowMilliLitres;
    dishesPulseCount = 0;
    attachInterrupt(digitalPinToInterrupt(dishesFlowSensorPin), dishesPulseCounter, FALLING);

    Serial.print("Dishes Flow rate: ");
    Serial.print(dishesFlowRate);
    Serial.print(" L/min\tTotal dishes flow: ");
    Serial.print(dishesTotalMilliLitres / 1000);
    Serial.println(" L");

    // Send dishes data to Laravel
    sendDishesDataToLaravel(dishesFlowRate, dishesTotalMilliLitres / 1000);

    // Check if dishes water limit is reached
    if (dishesTotalMilliLitres / 1000 > currentDishesWaterLimit) {
      digitalWrite(dishesRelayControlPin, LOW);
      delay(20000); // Stop water flow for 20 seconds
      digitalWrite(dishesRelayControlPin, HIGH);
      // Reset the total flow after stopping water
      dishesTotalMilliLitres = 0;
    }
  }
}

void showerPulseCounter() {
  showerPulseCount++;
}

void dishesPulseCounter() {
  dishesPulseCount++;
}

// Function to send shower data to Laravel
void sendShowerDataToLaravel(float flowRate, float totalFlow) {
  // Construct the JSON payload
  String payload = "{\"flowRate\": " + String(flowRate, 2) + ", \"totalFlow\": " + String(totalFlow, 2) + "}";

  // Send the HTTP POST request
  showerClient.beginRequest();
  showerClient.post(showerServerAddress);
  showerClient.sendHeader("Content-Type", "application/json");
  showerClient.sendHeader("Content-Length", payload.length());
  showerClient.beginBody();
  showerClient.print(payload);
  showerClient.endRequest();

  // Check the response from the server (optional)
  int statusCode = showerClient.responseStatusCode();
  String response = showerClient.responseBody();
  Serial.println("Shower server response: " + response);
}

// Function to send dishes data to Laravel
void sendDishesDataToLaravel(float flowRate, float totalFlow) {
  // Construct the JSON payload
  String payload = "{\"flowRate\": " + String(flowRate, 2) + ", \"totalFlow\": " + String(totalFlow, 2) + "}";

  // Send the HTTP POST request
  dishesClient.beginRequest();
  dishesClient.post(dishesServerAddress);
  dishesClient.sendHeader("Content-Type", "application/json");
  dishesClient.sendHeader("Content-Length", payload.length());
  dishesClient.beginBody();
  dishesClient.print(payload);
  dishesClient.endRequest();

  // Check the response from the server (optional)
  int statusCode = dishesClient.responseStatusCode();
  String response = dishesClient.responseBody();
  Serial.println("Dishes server response: " + response);
}

