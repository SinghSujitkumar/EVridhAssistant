from django.db import models
from datetime import datetime
from doctors.models import Doctor


class Patient(models.Model):
    doctor = models.ForeignKey(Doctor, on_delete= models.DO_NOTHING)
    name = models.CharField(max_length=200)
    photo= models.ImageField(upload_to='photos/%Y/%m/%d/')
    GENDER_CHOICES = (
        ('M', 'Male'),
        ('F', 'Female'),
    )
    gender = models.CharField(max_length=1, choices=GENDER_CHOICES)
    address =models.TextField(max_length=500)
    date_of_birth = models.DateField()
    phone = models.CharField(max_length=20)
    email = models.EmailField(max_length=200)
    medical_history = models.FileField(upload_to='medicalfiles/%Y/%m/%d/')
    relative_name = models.CharField(max_length=200)
    relative_phone = models.CharField(max_length=20)

    relative_email = models.EmailField(max_length=200)

    def __str__(self):
        return self.name