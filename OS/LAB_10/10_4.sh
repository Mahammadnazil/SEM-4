# 10.4 - WAP to print day based on number.

echo "Enter day : "
read a

if [[ $a -eq 1 ]] 
then
	echo "Monday"

elif [[ $a -eq 2 ]]
then
	echo "Tuesday"

elif [[ $a -eq 3 ]]
then
	echo "Wednesday"

elif [[ $a -eq 4 ]]
then
	echo "Thusday"

elif [[ $a -eq 5 ]]
then
	echo "Friday"

elif [[ $a -eq 6 ]]
then
	echo "Saturday"

elif [[ $a -eq 7 ]]
then
	echo "Sunday"

else
	echo "Enter between 0 to 7."
fi


# student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153/LAB_10$ bash 10_4.sh
# Enter day : 
# 3
# Wednesday
