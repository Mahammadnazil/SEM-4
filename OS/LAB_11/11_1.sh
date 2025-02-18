# 11.1 - WAP to read week days number print weekend name.

echo "Enter Choice :: "
read a

case $a in
	1) echo "Sunday";;
	2) echo "Monday";;
	3) echo "Tuesday";;
	4) echo "Wednesday";;
	5) echo "Thusday";;	
	6) echo "Friday";;
	7) echo "Saturday";;
	*) echo "Enter valid choice!!!!!!!!";;
esac

#-------------------------------------------------------------------------------

# student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153/LAB_11$ bash 11_1.sh
# Enter Choice :: 
# 10
# Enter valid choice!!!!!!!!

#-------------------------------------------------------------------------------

# student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153/LAB_11$ bash 11_1.sh
# Enter Choice :: 
# 1
# Sunday
