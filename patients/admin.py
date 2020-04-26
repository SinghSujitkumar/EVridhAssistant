from django.contrib import admin

from .models import Patient

# destructure the thngs that are displayed
class PatientAdmin(admin.ModelAdmin):
    list_display = ('name' ,'gender', 'phone', 'relative_name', 'relative_phone')
    list_display_links=('name',)
    list_filter=('name',)
    search_fields=('name','relative_name')

admin.site.register(Patient, PatientAdmin)

