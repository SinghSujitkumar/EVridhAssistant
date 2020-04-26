from django.shortcuts import render

def patients_dashboard(request):
    return render(request, 'patients/patients_dashboard.html')
def bloodpressure(request):
    return render(request, 'patients/bloodpressure.html')
def heartrate(request):
    return render(request, 'patients/heartrate.html')
def sleep(request):
    return render(request, 'patients/sleep.html')
def temperature(request):
    return render(request, 'patients/temperature.html')
