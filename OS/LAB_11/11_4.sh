# 11.4 - WAP to find a number of days in month.(1->31 , 2->28/29 , 3->31 , 4->30.......)

echo "Enter Month :: "
read a

case $a in
	1|3|5|7|8|10|12) echo "$a month have 31 days.";;
	2) echo "$a month have 28/29 days.";;
	4|6|9|11) echo "$a month have 30 days.";
esac

#-------------------------------------------------------------------------------

# student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153/LAB_11$ bash 11_4.sh
# Enter Month :: 
# 10
# 10 month have 31 days.

#-------------------------------------------------------------------------------