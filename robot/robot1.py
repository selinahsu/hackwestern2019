import RPi.GPIO as GPIO
import time

# robby = Robot(left=(7,8), right=(9,10))

# Use pin numbers instead of GPIO numbering
GPIO.setmode(GPIO.BOARD)

In1 = 40
In2 = 37
In3 = 35
In4 = 33
button = 38

# these pins activate the H bridge
GPIO.setup(In1, GPIO.OUT)
GPIO.setup(In2, GPIO.OUT)
GPIO.setup(In3, GPIO.OUT)
GPIO.setup(In4, GPIO.OUT)

# this pin is a button
GPIO.setup(button, GPIO.IN)

while True: #stay in this loop forever
    while GPIO.input(button) == GPIO.LOW:  # waiting for button input
        time.sleep(1)

    # exits while loop when pin 38 receives input
    print("Button is pushed!")

    for x in "xx":
        time.sleep(4)
        GPIO.output(In2, GPIO.HIGH)
        GPIO.output(In4, GPIO.HIGH)
        time.sleep(1)
        GPIO.output(In2, GPIO.LOW)
        GPIO.output(In4, GPIO.LOW)

    time.sleep(4)
    GPIO.output(In1, GPIO.HIGH)
    GPIO.output(In3, GPIO.HIGH)
    time.sleep(2)
    GPIO.output(In1, GPIO.LOW)
    GPIO.output(In3, GPIO.LOW)

GPIO.cleanup()
