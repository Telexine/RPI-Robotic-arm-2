# RPI-Robotic-arm-2

RPI IOT for ROBOT ARM 2 [ MR-999 ] With battery

## Hardware

* [Raspberry Pi 2 model B with Rasbian OS](https://www.raspberrypi.org/products/raspberry-pi-2-model-b/) - Mainboard
* [5V RELAY 8-CH 10A 250VAC GTTH-1015](https://gravitechthai.com/product_detail.php?d=859/) - For Controling motor
* [ROBOT ARM 2 (MR-999)](http://www.elekit.co.jp/en/product/MR-999R) - ARM

## Wireing

RPI

```
[ . ][ x ] >> To Relay VCC
[ . ][ . ]
[ . ][ x ] >> To Relay GND
[ . ][ . ]
[ . ][ . ]
[ x ][ x ] >> To Relay IN1,IN2
[ x ][ . ] >> To Relay IN3
```
Relay

```
  ----------
          []
  [+](IN1)[x]>> Bread Board L1
          [+] >> Bread board +
  ----------
          []
  [-](IN2)[x]>> Bread Board L1
          [-] >> Bread board -
  ----------
          []
  [+](IN3)[]
          [+] >> Bread board +
  ----------
          []
  [-](IN4)[]
          [-] >> Bread board -
  ----------
          []
  [+](IN5)[]
          [+] >> Bread board +
  ----------
          []
  [-](IN6)[]
          [-] >> Bread board -
  ----------
          []
  [+](IN7)[]
          [+] >> Bread board +
  ----------
          []
  [-](IN8)[]
          [-] >> Bread board -
  ----------
```


Bread Board

```
L1-L4
[Bread board +][Bread board -][L1]
...


```

ROBOT ARM 2

```
Motor
---------------------------------
 Grapper (Hand  - Open, close)
 Joint 1 (base  - cw, ccw)
 Joint 2 (base  - Open, Close)
 Joint 3 (Ankle - Open, Close)
 Joint 4 (Ankle - cw, ccw)
---------------------------------

[x] >> Bread Board +
[x] >> Bread Board L1 (Grapper)
[x] >> Bread Board L2 (Joint 3)
[x] >> Bread Board L3 (Joint 1)
[ ]
[x] >> Bread Board L4 (Joint 2)
[x] >> Bread Board L4 (Joint 4)
[x] >> Bread Board -

```


### Logic

```
Give examples
```

### Installing

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details