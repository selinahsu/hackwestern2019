import RPi.GPIO as GPIO
import time

# Use pin numbers instead of GPIO numbering
GPIO.setmode(GPIO.BOARD)

GPIO.setup(40, GPIO.OUT) # pin 40 activates H bridge
GPIO.setup(38, GPIO.IN) # pin 38 awaits button input

while GPIO.input(38) == GPIO.LOW:  # wait for button press
    time.sleep(1)

# exits while loop when pin 38 receives input
print("Button was pushed!")

time.sleep(3)

for x in range(3):
    GPIO.output(40, GPIO.HIGH)
    time.sleep(1)
    GPIO.output(40, GPIO.LOW)
    time.sleep(3)

GPIO.cleanup()