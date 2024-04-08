class parent():
    def output(self):
        print("i am parent")
        class child():
            def outputc(self):
                print("i am child")
            c=child()
            c.outputc()
            c.output()
              
  
                