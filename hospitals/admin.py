from django.contrib import admin

from .models import Hospital

class HospitalAdmin(admin.ModelAdmin):
    list_display=('name','address')
    search_fields=('name',)

admin.site.register(Hospital, HospitalAdmin)



