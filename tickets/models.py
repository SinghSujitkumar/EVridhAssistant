from django.db import models
import random
from datetime import datetime
from patients.models import Patient
from doctors.models import Doctor
from ambulance.models import Ambulance
from hospitals.models import Hospital
def random_string():
    return str(random.randint(100000000, 999999999))
class Ticket(models.Model):
    token = models.CharField(max_length=200,  default = random_string)
    patient = models.ForeignKey(Patient, on_delete=models.DO_NOTHING)
    doctor = models.ForeignKey(Doctor, on_delete= models.DO_NOTHING)
    hospital = models.ForeignKey(Hospital,on_delete= models.DO_NOTHING )
    ambulance = models.ForeignKey(Ambulance, on_delete= models.DO_NOTHING, default= None)
    join_date = models.DateTimeField(default= datetime.now, blank =True)
    serve_doc= models.BooleanField(default=False)
    serve_ambulance= models.BooleanField(default=False)
    serve_hospital = models.BooleanField(default=False)
    generation_date = models.DateTimeField(default= datetime.now)

    def __str__(self):
        return self.token

