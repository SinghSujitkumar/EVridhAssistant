from django.shortcuts import render

def index(request):
    return render(request,'pages/index.html')

def about(request):
    return render(request,'pages/about.html')

def wearables(request):
    return render(request,'pages/wearables.html')
