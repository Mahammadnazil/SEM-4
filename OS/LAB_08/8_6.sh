s# 8.6 - To check Wheater number are equal or not.


echo "Enter value of A:"
read a

echo "Enter value of B:"
read b

if [ $a -eq $b ] 
 then
	echo "$a is equal to $b "
fi
#------------------------------------------------------------------------------------

if [ $a -ne $b ] 
 then
	echo "$a is not equal to $b"
fi
#------------------------------------------------------------------------------------

#student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153$ bash 8_6.sh
#Enter value of A:
#10
#Enter value of B:
#20
#10 is not equal to 20
