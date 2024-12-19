#include<stdio.h>
void main()
{
	int f,c,ans1,ans2;
	printf("enter f\n");
	scanf("%d",&f);
	printf("enter c\n");
	scanf("%d",&c);
	ans1=((9*c/5)+32);
	ans2=(f-32)*(5/9);
	printf("%d %d\n",ans1,ans2);
}	
