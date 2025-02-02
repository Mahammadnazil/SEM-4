# 9.4 - WAP To check number is divisable by 5 or not.

echo "Enter value of A:"
read a

sum=$(echo "$a%5" | bc)

if [ $sum -eq 0 ]
then
	echo "$a is  Divisible by 5"
fi

else
	echo "$a is not Divisible by 5"

#------------------------------------------------------------------------------------

#student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153$ bash 9_4.sh
#Enter value of A:
#10
#10 is Divisible by 5 