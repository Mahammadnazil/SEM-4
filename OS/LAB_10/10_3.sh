# 10.3 - WAP to take 3 subject , calculate and display total marks , percentage and class.

echo "Enter 1st subject :"
read a

echo "Enter 2nd subject:"
read b

echo "Enter 3rd subject :"
read c

total=$(echo "$a + $b + $c" | bc)
echo "Total is : $total"

per=$(echo "$total/3" | bc)
echo "Percentage is : $per"

if [[ $per -ge 90 ]] 
then
	echo "Class A"

elif [[ $per -ge 80 ]]
then
	echo "Class B"

elif [[ $per -ge 70 ]]
then
	echo "Class C"

elif [[ $per -ge 60 ]]
then
	echo "Class D"

elif [[ $per -ge 40 ]]
then
	echo "Class E"

elif [[ $per -lt 40 ]]
then
	echo "Class Fail!!"
else
	echo "Enter valid marks."
fi

# student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153/LAB_10$ bash 10_3.sh
# Enter 1st subject :
# 50
# Enter 2nd subject:
# 50
# Enter 3rd subject :
# 50
# Total is : 150
# Percentage is : 50
# Class E
