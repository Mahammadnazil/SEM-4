# 10.1 - WAP to find largest 3 number .

echo "Enter value of A :"
read a

echo "Enter value of B :"
read b

echo "Enter value of C :"
read c

if [[ $a -gt $b && $a -gt $c ]]
then
	echo " $a is largest number."
elif [[ $b -gt $c && $b -gt $a ]] 
then
	echo " $b is largest number."
else
	echo " $c is largest number."
fi

#student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153/LAB_10$ bash 10_1.sh
#Enter value of A :
#10
#Enter value of B :
#20
#Enter value of C :
#30
#30 is largest number.
