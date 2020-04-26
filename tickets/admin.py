from django.contrib import admin

from .models import Ticket

class TicketAdmin(admin.ModelAdmin):
    list_display=('token','patient','doctor','ambulance','hospital','generation_date')
    list_display_links=('token','patient')
    list_filter=('patient',)
    search_fields=['patient__name','doctor__name','ambulance__name','hospital__name']

admin.site.register(Ticket, TicketAdmin )
