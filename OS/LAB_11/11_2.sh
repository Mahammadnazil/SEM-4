# 11.2 - WAP to read gender (m|M|F|f) then print corrsponding gender. (m|m:-male.......)

echo "Enter Choice :: "
read a

case $a in
	m|M) echo "Male";;
	f|F) echo "Female";;
	*) echo "Enter Valid Choice";;
esac

#-------------------------------------------------------------------------------

# Enter Choice :: 
# m
# Male

#-------------------------------------------------------------------------------

# student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153/LAB_11$ bash 11_2.sh
# Enter Choice :: 
# M
# Male

#-------------------------------------------------------------------------------

# student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153/LAB_11$ bash 11_2.sh
# Enter Choice :: 
# f
# Female

#-------------------------------------------------------------------------------

# student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153/LAB_11$ bash 11_2.sh
# Enter Choice :: 
# F
# Female

#-------------------------------------------------------------------------------