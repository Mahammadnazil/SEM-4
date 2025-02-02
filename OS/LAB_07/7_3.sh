# 7.3 - WAP to Addition of 2 number. ($a+$b)

echo "Enter value of A:"
read a

echo "Enter value of B:"
read b

sum=$(echo "$a + $b" | bc)
echo "Sum is :$sum"

#----------------------------------------------------------------------
#student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153$ bash 7_3.sh
#Enter value of A:
#10
#Enter value of B:
#10
#Sum is :20
