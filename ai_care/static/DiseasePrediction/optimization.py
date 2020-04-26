import pandas as pd
from sklearn import model_selection
from sklearn.neighbors import KNeighborsClassifier
from sklearn.tree import DecisionTreeClassifier
from sklearn.svm import SVC
import pickle
from sklearn.ensemble import VotingClassifier
from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestClassifier
import matplotlib.pyplot as plt

def saveModel(model):
    with open('saved_model.plk','wb') as fid:
        pickle.dump(model,fid)
def loadModel():
    with open('saved_model.plk','rb') as fid:
        return pickle.load(fid)

#### Training data ####
'''data=pd.read_csv('final_dataset_matrix.csv')
df_x=data.iloc[:,1:]
df_y=data.iloc[:,0]
x_train,y_train=df_x,df_y'''


test=pd.read_csv('test.csv')
df_x1=test.iloc[:,1:]
df_y1=test.iloc[:,0]
x_test,y_test=df_x1,df_y1

parameters={
           'n_estimators': 10,       
           }
symptoms=pd.read_csv('remove.csv')
df_y1=symptoms.iloc[:,0]
for a in df_y1:
    print(a)
#print(df_y1)

#model1=RandomForestClassifier(**parameters)

### Saved Model ###
'''model2 = KNeighborsClassifier()
model3 =SVC(kernel='rbf') 
model = VotingClassifier(estimators=[ ('kn', model2),('sv',model3)], voting='hard')
model.fit(x_train,y_train)
saveModel(model)'''

model=loadModel()
rf_predictions =model.predict(x_test)
a= rf_predictions[0]
print(a)




