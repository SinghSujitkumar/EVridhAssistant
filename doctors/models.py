from django.db import models
from datetime import datetime
from hospitals.models import Hospital
class Doctor(models.Model):
    name = models.CharField(max_length=200)
    phone = models.CharField(max_length=20)
    email= models.EmailField(max_length=200,default= None)
    photo= models.ImageField(upload_to ='photos/%Y/%m/%d/')
    degree = models.CharField(max_length=200, default="MBBS")
    role = models.CharField(max_length=200)
    specialization = models.CharField(max_length=200, blank=True)
    hospital = models.ForeignKey(Hospital ,default= None ,blank =True, on_delete= models.DO_NOTHING)
    join_date = models.DateTimeField(default= datetime.now, blank =True)
    def __str__(self):
        return self.name
