import pickle


class Company(object):
    def __init__(self, name, value):
        self.name = name
        self.value = value


with open('company_data.txt', 'wb') as outp:
    company1 = Company('banana', 40)
    pickle.dump(company1, outp, pickle.HIGHEST_PROTOCOL)

    company2 = Company('spam', 42)
    pickle.dump(company2, outp, pickle.HIGHEST_PROTOCOL)

del company1
del company2
