#include <stdio.h>

int main()
{
	
	long long factr,num;
	factr=2;
	num=600851475143;
	while(factr<num)
	{
		if(num%factr==0)
		{
			num/=factr;
			// if (num==1)
			// {	
				// printf("%ld\n",factr)
				// return 0;
			// }
		}
		else if(factr==2)
		factr=3;
		else
		factr+=2;
	}
	printf("%lld",factr);
	}