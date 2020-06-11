#!/bin/bash

# comprobar el directori de treball, ha de ser l'arrel, data o images
curdir=$(pwd | rev | cut -d/ -f1 | rev)

if [ "$curdir" == "data" -o "$curdir" == "images" ]; then
	cd ..
fi

if [ ! -d "data" -o ! -d "images" ]; then
	echo "Error!!!"
	exit
fi

# fer un check a les imatges
cd images
for i in $(php ../data/checkimg.php); do
	php ../data/fiximages.php $i
done
cd ..

# generar el index.html
cd data
php index.php > ../index.html
cd ..

