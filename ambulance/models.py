from django.db import models
from datetime import datetime


class Ambulance(models.Model):
    name = models.CharField(max_length=200)
    photo= models.ImageField(upload_to ='photos/%Y/%m/%d/')
    phone = models.CharField(max_length=10)

    def __str__(self):
        return self.name

