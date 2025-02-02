# 8.1 - WAP to Calculate the basic calculater.

echo "Enter value of A:"
read a

echo "Enter value of B:"
read b

echo "Enter 1 for addition"
echo "Enter 2 for subtraction"
echo "Enter 3 for multiplication"
echo "Enter 4 for division"
read value
#------------------------------------------------------------------------------------
if [ $value -eq 1 ]; 
then
	sum=$(echo "$a+$b" | bc)
	echo "Addition is :$sum"
	
fi
#------------------------------------------------------------------------------------
if [ $value -eq 2 ]; 
then
	sum=$(echo "$a-$b" | bc)
	echo "Subtraction is :$sum"
	
fi
#------------------------------------------------------------------------------------
if [ $value -eq 3 ]; 
then
	sum=$(echo "$a*$b" | bc)
	echo "Multiplication is :$sum"
	
fi
#------------------------------------------------------------------------------------
if [ $value -eq 4 ]; 
then
	sum=$(echo "$a/$b" | bc)
	echo "Division is :$sum"
	
fi
#------------------------------------------------------------------------------------

#student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153$ bash 8_1.sh
#Enter value of A:
#10
#Enter value of B:
#20
#Enter 1 for addition
#Enter 2 for subtraction
#Enter 3 for multiplication
#Enter 4 for division
#1
#Addition is :30
