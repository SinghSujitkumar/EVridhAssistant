import numpy as np # linear algebra
import pandas as pd # data processing, CSV file I/O (e.g. pd.read_csv)
import json
import sys
import os
import ast

A=pd.read_csv("final_dataset_matrix.csv")

col=A.columns.values 
#sp=ast.literal_eval(sys.argv[1]) 
#sp=list(sys.argv[1][0])

with open('rem.json') as data:

  sp=json.load(data)
#sp={'Insomnia (Trouble sleeping)':3,'Lower abdominal pain':0,'Shortness of breath':3,'Congestion in chest or lungs':1,'Fever':2,'Alcohol abuse':4,'Delusions or hallucinations':2,'Difficulty breathing':4,'Chest pressure':3,'Anger':2,'Impotence':1}
stat=0
if not os.path.isfile('remove.csv'):
  temp=pd.DataFrame(columns=['symptoms'])
  #print(temp)
  rt=[]
  for key,value in sp.items():
    rt.append(key)
  x=pd.DataFrame(rt,columns=['symptoms'])
  #print(x)
  temp=pd.concat([temp,x],ignore_index=True)
  temp.to_csv("remove.csv",index=False)
  #print('yay')
  stat=1

rt=[]

if stat==0:
  rem=pd.read_csv('remove.csv')
  for key,value in sp.items():
    rt.append(key)
  rem=pd.concat([rem,pd.DataFrame(rt,columns=['symptoms'])],ignore_index=True)
  rem=rem.drop_duplicates(subset='symptoms', keep='first')
  rem.to_csv('remove.csv',index=False)

  
 
if not os.path.isfile('test.csv'):
  ze=np.zeros(shape=(1,len(col)))
  temp=pd.DataFrame(ze,columns=[col])

  temp.to_csv("test.csv",index=False)
  

test=pd.read_csv('test.csv')
#rem.loc[0]

rem=pd.read_csv('remove.csv')

#test=pd.read_csv('test.csv')

for key,value in sp.items():
  if value==0:
    test[key][0]=5
  elif value==1:
    test[key][0]=25
  elif value==2:
    test[key][0]=45
  else:
    test[key][0]=75

test.to_csv('test.csv',index=False)


#
#A=syd.pivot_table(values='TFIDF_score',index='MeSH_Symptom_Term',columns='MeSH_Disease_Term',aggfunc=np.max)
'''A=pd.read_csv("C:/Users/Stevert Lobo/Desktop/TE Project/final_dataset_matrix.csv")
A=A.fillna(0)
#A=A.apply(np.ceil)
A.to_csv("pro.csv")'''

#Qsym= ( sym.loc[(sym['symptom']=='Fever')  | (sym['symptom'] == 'Headache') | (sym['symptom']=='Lower abdominal pain')] )
#Qsym=(sym.loc[(sym['symptom'] == 'Alcohol abuse')| (sym['symptom'] == 'Anxiety (Nervousness)') | (sym['symptom'] == 'Skin itching') ]) 
#Qsym=(sym.loc[(sym['symptom']=='Lower abdominal pain') | (sym['symptom'] == 'Fever') | (sym['symptom'] == 'Shortness of breath')])

#sp=['Lower abdominal pain','Shortness of breath','Congestion in chest or lungs','Fever','Alcohol abuse','Delusions or hallucinations']

#sp=['Fever','Cough','Sneezing','Congestion in chest or lungs','Fever of Unknown Origin','Diarrhea'
syl=rem['symptoms'].tolist()
#print(syl,type(syl))
crl=A[A.columns[1:]].corr()[syl][:]
crl['weight']=0
#print(crl)
for column in crl:
  if column!='weight':
    crl['weight']+=crl[column]
    crl=crl.drop(column,axis=1)
crl=crl.drop(syl)
#print('syl',syl)
fin=crl.sort_values(by='weight',ascending=False)
fl=fin[:9].index
rt=[]
for f in fl:
  print(f)
  #rt.append(f)
#rem.index.name='index'
#
#rem.append(rt,ignore_index=True)
rt=[]
'''if stat==0:
  for key,value in sp.items():
    rt.append(key)
  rem=pd.concat([rem,pd.DataFrame(rt,columns=['symptoms'])],ignore_index=True)
  rem=rem.drop_duplicates(subset='symptoms', keep='first')
  rem.to_csv('remove.csv',index=False)'''

#print(rem)