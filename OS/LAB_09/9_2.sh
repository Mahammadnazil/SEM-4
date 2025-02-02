# 9.2 - WAP To check Wheater number is even or odd.

echo "Enter value of A:"
read a

sum=$(echo "$a%2" | bc)

if [ $sum -eq 0 ]
then
	echo "$a is a Even Number"
fi

else
	echo "$a is a Odd Number"
#-------------------------------------------------------------------
#student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153$ bash 9_2.sh
#Enter value of A:
#10
#10 is a Even Number