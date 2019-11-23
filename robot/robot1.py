import RPi.GPIO as GPIO

# Use pin numbers instead of GPIO numbering
GPIO.setmode(GPIO.BOARD)

GPIO.setup(40, GPIO.OUT)
GPIO.output(40, GPIO.HIGH)

# input from GPIO7
# input_value = GPIO.input(7)