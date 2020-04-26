from django.urls import path

# url for home page
from . import views
urlpatterns=[
    # path('',views.index, name='index'),
    path('patients_dashboard',views.patients_dashboard, name='patients_dashboard'),
    path('bloodpressure',views.bloodpressure, name='bloodpressure'),
    path('heartrate',views.heartrate, name='heartrate'),
    path('sleep',views.sleep, name='sleep'),
    path('temperature',views.temperature, name='temperature'),
    # path('wearables',views.wearables, name='wearables')
]