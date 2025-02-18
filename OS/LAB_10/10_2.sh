# 10.2 - WAP to whether give year is leep or not.

echo "Enter year :"
read y

if [[ $((y%4)) -eq 0 &&  $((y%100)) -ne 0 || $((y%400)) -eq 0 ]] 
then
	echo "$y is leap year."
else
	echo "$y is not leap year."
fi

#student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153/LAB_10$ bash 10_2.sh
#Enter year :
#2025
#2025 is not leap year.