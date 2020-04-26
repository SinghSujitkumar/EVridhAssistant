from django.urls import path

# url for home page
from . import views
urlpatterns=[
    path('doctor_index',views.doctor_index, name='doctor_index'),
    path('patient_details',views.patient_details, name='patient_details'),
    path('service_details',views.service_details, name='service_details')
]