# 10.5 - WAP to  read 2 digits and print "equal" if they are and if not then print largest from then.

echo "Enter value of A :"
read a

echo "Enter value of B :"
read b

if [ $a -eq $b ]
then
	echo "Both are equal" 
else
	if [ $a -gt $b ]
	then
		echo "$a is larger than $b."
	else 
		echo "$b is larger than $a."
	fi
fi

# student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153/LAB_10$ bash 10_5.sh
# Enter value of A :
# 10
# Enter value of B :
# 20
# 20 is larger than 10.
