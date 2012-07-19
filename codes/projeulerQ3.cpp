#include <stdio.h>

int main()
{
	long long num,i,uplimit,maxfact=0;
	num=13195;//600851475143;
	uplimit=num;
	for(i=1;i<=uplimit;i++)
	{	
		if(num%i==0)
		{
			uplimit=num/i;
			if(maxfact<i)
			{maxfact=i;printf("%ld\n",i);}
		}
	}
	printf("%ld",maxfact);
}