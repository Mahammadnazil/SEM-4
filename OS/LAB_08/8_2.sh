# 8.2 - WAP To Find Largest Number From Given Two Numbers.

echo "Enter value of A:"
read a

echo "Enter value of B:"
read b

if [ $a -gt $b ];
then
	echo "A is a Largest Number"
fi
#------------------------------------------------------------------------------------
if [ $a -lt $b ];
then
	echo "A is a Largest Number"
fi	
#------------------------------------------------------------------------------------

#student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153$ bash 8_2.sh
#Enter value of A:
#10
#Enter value of B:
#20
#B is a Largest Number
