# 8.5 - WAP To check number is divisable by 5 or not.

echo "Enter value of A:"
read a

if [ $((a%5)) -eq 0 ] 
 then
	echo "$a is a Divisible by 5 "
fi
#------------------------------------------------------------------------------------

if [ $((a%5)) -ne 0 ] 
 then
	echo "$a is not a Divisible by 5"
fi
#------------------------------------------------------------------------------------

#student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153$ bash 8_5.sh
#Enter value of A:
#10
#10 is a Divisible by 5 