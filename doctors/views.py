from django.shortcuts import render
from .models import Doctor
from patients.models import Patient
def doctor_index(request):
    doctors = Doctor.objects.order_by('-join_date')
    patients = Patient.objects.order_by('-name')
    context={
        "patients":patients,
        "doctors":doctors
    }
    return render(request,'doctors/index.html', context)

def patient_details(request):
    return render(request, 'doctors/patient_details.html')

def service_details(request):
    return render(request, 'doctors/service_details.html')
