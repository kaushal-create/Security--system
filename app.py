import sys
import cgi
from Adafruit_IO import Client, Feed, Data
Adafruit_IO_USERNAME = "rz_kaushal"
Adafruit_IO_KEY = "aio_ilDu41MPGetCzlxZKg7yLp4f7P8x"
aio = Client(Adafruit_IO_USERNAME,Adafruit_IO_KEY)

message = sys.argv[1]

def result(input):
  if input == "OPEN":
    aio.send_data('nodemcu-project', "OPEN")
  else :
    aio.send_data('nodemcu-project', "CLOSE")


result(message)



