# 7.5 - WAP to Calculate the Simple Intrest. (p*r*t/100)

echo "Enter value of P:"
read p

echo "Enter value of R:"
read r

echo "Enter value of T:"
read t

Simple_Intrest=$(echo "$p*$r*$t/100" | bc)
echo "Simple Intrest is :$Simple_Intrest"

#-----------------------------------------------------------------------------
#student@student-HP-Pro-3330-MT:~/Desktop/BHAVIN_153$ bash 7_5.sh
#Enter value of P:
#10
#Enter value of R:
#10
#Enter value of n:
#10
#Simple Intrest is :10

