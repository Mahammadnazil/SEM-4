# 8.4 - WAP To check Wheater number is Positive of Nagative.


echo "Enter value of a :"
read a

if [ $a -gt 0 ]
then
	echo "$a is positive"
fi
#------------------------------------------------------------------------------------

if [ $a -lt 0 ]
then
	echo "$a is Nagative"
fi
#------------------------------------------------------------------------------------

#student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153$ bash 8_4.sh
#Enter value of a :
#10
#10 is positive
