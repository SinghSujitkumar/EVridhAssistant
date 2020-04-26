from django.db import models
from datetime import datetime

class Hospital(models.Model):
    name = models.CharField(max_length=200)
    phone = models.CharField(max_length=20)
    photo= models.ImageField(upload_to ='photos/%Y/%m/%d/')
    address= models.CharField(max_length=200)

    def __str__(self):
        return self.name

