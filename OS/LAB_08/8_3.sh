# 8.3 - WAP To check Wheater number is even or odd.

echo "Enter value of A:"
read a

if [ $((a%2)) -eq 0 ] 
 then
	echo "$a is a Even Number"
fi
#------------------------------------------------------------------------------------

if [ $((a%2)) -ne 0 ] 
 then
	echo "$a is a odd Number"
fi
#------------------------------------------------------------------------------------

#student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153$ bash 8_3.sh
#Enter value of A:
#10
#10 is a Even Number
