# 7.4 - WAP to Print Area of Circle. (3.14*r*r)

echo "Enter value of r:"
read r

area=$(echo "3.14*$r*$r" |bc)
echo "Area is:$area"

#---------------------------------------------------------------
#student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153$ bash 7_4.sh
#Enter value of r:
#10
#Area is:314.00
