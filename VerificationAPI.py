# ID: "417UHSOF6837"
import sys
import urllib.request
import xml.etree.ElementTree as ET

def validate():
        
        Address1 = sys.argv[1] + " " + sys.argv[2] + " " + sys.argv[3]
        Address2 = ""
        City = sys.argv[4]
        State = sys.argv[5]
        ZipFive = sys.argv[6]

        #Creates request packet to send to URL
        requestXML = """
        <?xml version="1.0"?>
        <AddressValidateRequest USERID="417UHSOF6837">
                <Revision>1</Revision>
                <Address ID="0">
                        <Address1>""" + Address1 + """</Address1>
                        <Address2>""" + Address2 + """</Address2>
                        <City>""" + City + """</City>
                        <State>""" + State + """</State>
                        <Zip5>""" + ZipFive + """</Zip5>
                        <Zip4/>
                </Address>
        </AddressValidateRequest>
        """

        #prepare xml string doc for query string
        DocRequest = requestXML
        DocRequest = DocRequest.replace('\n','').replace('\t','')
        DocRequest = urllib.parse.quote_plus(DocRequest)

        #USPS API URL
        url = "http://production.shippingapis.com/ShippingAPI.dll?API=Verify&XML=" + DocRequest
        #print(url + "\n\n")

        response = urllib.request.urlopen(url)
        if response.getcode() != 200:
                print("Error making HTTP call:")
                print(response.info())
                exit()

        contents = response.read()
        #print(contents)

        root = ET.fromstring(contents)
        for address in root.findall('Address'):
                try:
                        if address.find("DPVConfirmation").text == 'Y':
                                print("True")
                        else:
                                print("False")
                except:
                        print("False")

validate()
