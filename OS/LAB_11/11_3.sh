# 11.3 - WAP to check wheater character is vowel or consonunt.

echo "Enter Character :: "
read a

case $a in
	a|e|i|o|u|A|E|I|O|U) echo "$a is a Vowel.";;
	*) echo "$a is a Consonant.";;
esac

#------------------------------------------------------------------

# Enter Character :: 
# a
# a is a Vovel.

#------------------------------------------------------------------

# student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153/LAB_11$ bash 11_3.sh
# Enter Character :: 
# A
# A is a Vovel.

#------------------------------------------------------------------

# student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153/LAB_11$ bash 11_3.sh
# Enter Character :: 
# b
# b is a Consonant.

#------------------------------------------------------------------
