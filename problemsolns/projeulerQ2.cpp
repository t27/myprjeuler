#include <stdio.h>

int main()
{
	long a,b,fibterm;
	a=0;
	b=1;
	fibterm=-0;
	long evesum=0;
	printf("%ld",evesum);
	printf("hello\n");
	while(fibterm<4000000)
	{
		
		fibterm=a+b;
		a=b;
		b=fibterm;
		if(fibterm%2==0)
		evesum+=fibterm;
	}
	printf("%ld",evesum);
	
}
