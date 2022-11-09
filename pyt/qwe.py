import sys

l=(sys.argv[1:])
import pandas as pd
data=pd.read_csv("Songs.csv",index_col=0)
import IPython
import random
from IPython.display import HTML
audiolist = []
mood=l[0]
language=l[1]
for i in range(31):
  if(data.MOOD[i] == mood and data.LANGUAGE[i] == language):
    audiolist.append(data.AUDIO_ID[i])
audiotoken = random.choice(audiolist)
for i in range (31):
  if(data.AUDIO_ID[i]==audiotoken):
    videotoken = data.VIDEO_ID[i]
print('<iframe width="560" height="315" src="https://www.youtube.com/embed/%s" frameborder="0" allow="accelerometer; autoplay=True; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br><audio controls align="center">    <source src="http://docs.google.com/uc?export=open&id=%s" type="audio/mp3">    </audio>'%(videotoken,audiotoken))