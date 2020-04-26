from django.contrib import admin

# Register your models here.
from .models import Doctor

class DoctorAdmin(admin.ModelAdmin):
    list_display=('id','name','degree','phone','email','hospital')
    list_display_links=('id','name')
    list_filter=('name',)
    search_fields=('name','email','hospital__name')

admin.site.register(Doctor, DoctorAdmin )