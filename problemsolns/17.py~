#find no of chars in word form of a number

#found no of char from 1-99(=854), 1-9(36)using program 
#1-99 X 10 == 8540
#1-9 X 100(in one hundred and n,two hundred and n etc.) == 3600
#hundred X 900 (from 100-999) == 6300
#and X (900-9) (and occurs in all 3 digit nos except 100,200...900) = 2700-27
#one thousand
#ANSWER=8540+3600+6300+2700-27+11=21124


def getStr(num):
  if num==9:return "nine"
  if num==8:return "eight"
  if num==7:return	"seven"
  if num==6:return "six"
  if num==5:return "five"
  if num==4:return "four"
  if num==3:return "three"
  if num==2:return "two"
  if num==1:return "one"
  if num==10:return "ten"
  if num==20:return "twenty"
  if num==30:return "thirty"
  if num==40:return "forty"
  if num==50:return "fifty"
  if num==60:return "sixty"
  if num==70:return "seventy"
  if num==80:return "eighty"
  if num==90:return "ninety"
  if num==11:return "eleven"
  if num==12:return "twelve"
  if num==13:return "thirteen"
  if num==14:return "fourteen"
  if num==15:return "fifteen"
  if num==16:return "sixteen"
  if num==17:return "seventeen"
  if num==18:return "eighteen"
  if num==19:return "nineteen"

def getFullText(num):
  strin=[]
  #if num>99 :
	#strin.append(getStr((num/100))+" hundred")
	
  if (num%100)<20:
	strin.append(getStr((num%100)))
  elif (num%100)>19:
	strin.append(getStr(((num%100)/10)*10))
	if num%10 > 0 :strin.append(getStr(num%10))
  
  return strin
  
  
def main():
  count=0
  list1=[]
  print getFullText(2)
  for i in range(99):
	list1=getFullText(i+1)
	if len(list1)>1:
	  strn=' '.join(list1)
	  count+=(len(strn)-1)
	else:
	  count+=len(list1[0])
  print count

  
if __name__ == '__main__':
  main()