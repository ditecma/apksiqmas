#!/bin/bash
 
echo "ADB Install"
 
for SERIAL in $(adb devices | tail -n +2 | cut -sf 1);
do
  for APKLIST in $(ls *.apk);
  do
  echo "Installatroning $APKLIST on $SERIAL"
  adb -s $SERIAL install $APKLIST
  done
done
echo "Done"
