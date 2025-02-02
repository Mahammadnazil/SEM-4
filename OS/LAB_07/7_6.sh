# 7.6 - WAP to Swap 2 Numbers.

echo "Enter value of x:"
read x

echo "Enter value of y:"
read y

temp=$y
y=$x
x=$temp
echo "$x"
echo "$y"

#------------------------------------------------------------------------------
#student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153$ bash 7_6.sh
#Enter value of x:
#10
#Enter value of y:
#20
#
#20
#10
